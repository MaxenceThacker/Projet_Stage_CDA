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
        public DocumentForm(Documents FenetreMere, MyDbContext _ctx, string mode, DocumentDTOOut D)
        {

            _context = _ctx;
            _FenetreMere = FenetreMere;
            _Mode = mode;
            _Document = D;
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
            DocumentDTOIn D = new DocumentDTOIn();
            D.LibelleDocument = LibelleDocument;
            if (_Mode == "Ajouter")
            {
                _DocumentController.CreateDocument(D);
            }
            else if (_Mode == "Modifier")
            {
                _DocumentController.UpdateDocument(_Document.Id, D);
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

        private void BrowseButton_Click(object sender, RoutedEventArgs e)
        {
            // Créer OpenFileDialog
            Microsoft.Win32.OpenFileDialog openFileDlg = new Microsoft.Win32.OpenFileDialog();

            // Lance OpenFileDialog en appellant ShowDialog.
            Nullable<bool> result = openFileDlg.ShowDialog();
            // Obtiens le nom du fichier selectionné.
            // charge le contenue du fichier dans une TextBlock
            if (result == true)
            {
                openFileDlg.InitialDirectory = @"DOSSIER PDF";
                openFileDlg.Multiselect = true;
                openFileDlg.DefaultExt = ".txt";
                openFileDlg.Filter = "Documents textes (.txt)|*.txt";
                FileNameTextBox.Text = openFileDlg.FileName;
                TextBlock1.Text = System.IO.File.ReadAllText(openFileDlg.FileName);
            }
        }
    }
}
