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
    // "https://www.c-sharpcorner.com/uploadfile/mahesh/openfiledialog-in-wpf/"
    /// <summary>
    /// Logique d'interaction pour DocumentForm.xaml
    /// </summary>
    public partial class DocumentForm : Window
    {
        //private MainWindow FenetreMere { get; set; }
        private DocumentController _DocumentController { get; set; }
        private MyDbContext _context { get; set; }
        private Documents _FenetreMere { get; set; }
        public string _Mode { get; set; }
        public DocumentDTOOut _Document { get; set; }

        public DocumentForm(Documents FenetreMere, MyDbContext _ctx, string mode)
        {

            _context = _ctx;
            _FenetreMere = FenetreMere;
            _Mode = mode;
            InitializeComponent();
            Init();
        }
        public DocumentForm(Documents FenetreMere, MyDbContext _ctx, string mode, DocumentDTOOut A)
        {

            _context = _ctx;
            _FenetreMere = FenetreMere;
            _Mode = mode;
            _Document = A;
            InitializeComponent();
            Init();
        }

        private void Init()
        {
            this._DocumentController = new DocumentController(_context);
            if (_Mode == "Modifier")
            {
                this.LibelleDocument.Text = _Document.LibelleDocument;
            }
        }

        private void Go(object sender, RoutedEventArgs e)
        {
            string LibelleDocument = this.LibelleDocument.Text;
            DocumentDTOIn A = new DocumentDTOIn();
            A.LibelleDocument = LibelleDocument;
            if (_Mode == "Ajouter")
            {
                _DocumentController.CreateDocument(A);
            }
            else if (_Mode == "Modifier")
            {
                _DocumentController.UpdateDocument(_Document.Id, A);
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
