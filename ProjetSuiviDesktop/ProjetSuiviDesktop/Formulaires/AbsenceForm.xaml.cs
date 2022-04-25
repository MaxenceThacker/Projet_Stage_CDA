using ProjetSuiviDesktop.Controllers;
using ProjetSuiviDesktop.Data;
using ProjetSuiviDesktop.Data.Dtos;
using ProjetSuiviDesktop.Listes;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace ProjetSuiviDesktop.Formulaires
{
    /// <summary>
    /// Logique d'interaction pour AbsenceForm.xaml
    /// </summary>
    public partial class AbsenceForm : Window
    {
        //private MainWindow FenetreMere { get; set; }
        private AbsenceController _AbsenceController { get; set; }
        private MyDbContext _context { get; set; }
        private Absences _FenetreMere { get; set; }
        public string _Mode { get; set; }
        public AbsenceDTOOut _Absence { get; set; }

        public AbsenceForm(Absences FenetreMere, MyDbContext _ctx, string mode)
        {

            _context = _ctx;
            _FenetreMere = FenetreMere;
            _Mode = mode;
            InitializeComponent();
            Init();
        }
        public AbsenceForm(Absences FenetreMere, MyDbContext _ctx, string mode, AbsenceDTOOut A)
        {

            _context = _ctx;
            _FenetreMere = FenetreMere;
            _Mode = mode;
            _Absence = A;
            InitializeComponent();
            Init();
        }

        private void Init()
        {
            this._AbsenceController = new AbsenceController(_context);
            if (_Mode == "Modifier")
            {
                this.Justification.Text = _Absence.Justification;
                this.NbrHeureAbsence.Text = "" + _Absence.NbrHeureAbsence;
                this.DateAbsence.SelectedDate = _Absence.DateAbsence;
            }
        }

        private void Go(object sender, RoutedEventArgs e)
        {
            string NbrHeureAbsence = this.NbrHeureAbsence.Text;
            string Justification = this.Justification.Text;
            DateTime DateAbsence = (DateTime)this.DateAbsence.SelectedDate;
            AbsenceDTOIn A = new AbsenceDTOIn();
            A.NbrHeureAbsence = int.Parse(NbrHeureAbsence);
            A.Justification = Justification;
            A.DateAbsence = DateAbsence;
            if (_Mode == "Ajouter")
            {
                _AbsenceController.CreateAbsence(A);
            }
            else if (_Mode == "Modifier")
            {
                _AbsenceController.UpdateAbsence(_Absence.Id, A);
            }


            if (this.Left != this._FenetreMere.Left || this.Top != this._FenetreMere.Top)
            {
                this._FenetreMere.Left = this.Left;
                this._FenetreMere.Top = this.Top;
            }
            this._FenetreMere.Visibility = Visibility.Visible;
            _FenetreMere.RefreshDG();
            this.Close();
        }

        private void Back(object sender, RoutedEventArgs e)
        {
            if (this.Left != this._FenetreMere.Left || this.Top != this._FenetreMere.Top)
            {
                this._FenetreMere.Left = this.Left;
                this._FenetreMere.Top = this.Top;
            }
            this._FenetreMere.Visibility = Visibility.Visible;
            this.Close();
        }
    }
}
