using ProjetSuiviDesktop.Controllers;
using ProjetSuiviDesktop.Data;
using ProjetSuiviDesktop.Data.Dtos;
using ProjetSuiviDesktop.Formulaires;
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

namespace ProjetSuiviDesktop.Listes
{
    /// <summary>
    /// Logique d'interaction pour Absences.xaml
    /// </summary>
    public partial class Absences : Window
    {
        private MainWindow FenetreMere { get; set; }
        private AbsenceController _AbsenceController { get; set; }
        public MyDbContext _context { get; set; }


        public Absences(MainWindow FenetreMere, MyDbContext _ctx)
        {
            InitializeComponent();
            this.FenetreMere = FenetreMere;
            this._context = _ctx;
            Init();
        }

        private void Init()
        {
            this._AbsenceController = new AbsenceController(_context);
            RefreshDG();
        }


        private void Back(object sender, RoutedEventArgs e)
        {
            if (this.Left != this.FenetreMere.Left || this.Top != this.FenetreMere.Top)
            {
                this.FenetreMere.Left = this.Left;
                this.FenetreMere.Top = this.Top;
            }
            this.Close();
        }

        public void RefreshDG()
        {
            this.dg.ItemsSource = _AbsenceController.GetAllAbsence();
        }

        private void Action(object sender, RoutedEventArgs e)
        {
            AbsenceDTOOut A = (AbsenceDTOOut)dg.SelectedItem;
            string mode = (string)((Button)sender).Content;
            double left = this.Left;
            double top = this.Top;
            switch (mode)
            {
                case "Ajouter":
                    AbsenceForm formAbsenceAdd = new(this, _context, mode);
                    formAbsenceAdd.Left = left;
                    formAbsenceAdd.Top = top;
                    this.Visibility = Visibility.Hidden;
                    formAbsenceAdd.Show();
                    break;
                case "Modifier":
                    if (dg.SelectedItem == null)
                    {
                        //Afficher window Erreur
                    }
                    else
                    {
                        AbsenceForm formAbsenceUp = new(this, _context, mode, A);
                        formAbsenceUp.Left = left;
                        formAbsenceUp.Top = top;
                        this.Visibility = Visibility.Hidden;
                        formAbsenceUp.Show();
                    }
                    break;
                case "Supprimer":
                    this.Opacity = 0.25;
                    Suppression windowSupp = new Suppression();
                    windowSupp.Left = left;
                    windowSupp.Top = top;
                    if ((bool)windowSupp.ShowDialog())
                    {
                        _AbsenceController.DeleteAbsence(A.Id);
                        Init();
                    }
                    this.Opacity = 1;
                    break;
                default:
                    break;
            }
        }
    }
}
