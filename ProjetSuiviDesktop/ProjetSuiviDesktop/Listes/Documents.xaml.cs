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
    /// Logique d'interaction pour Documents.xaml
    /// </summary>
    public partial class Documents : Window
    {
        private MainWindow FenetreMere { get; set; }
        private DocumentController _DocumentController { get; set; }
        public MyDbContext _context { get; set; }


        public Documents(MainWindow FenetreMere, MyDbContext _ctx)
        {
            InitializeComponent();
            this.FenetreMere = FenetreMere;
            this._context = _ctx;
            Init();
        }

        private void Init()
        {
            this._DocumentController = new DocumentController(_context);
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
            this.dg.ItemsSource = _DocumentController.GetAllDocument();
        }

        private void Action(object sender, RoutedEventArgs e)
        {
            DocumentDTOOut D = (DocumentDTOOut)dg.SelectedItem;
            string mode = (string)((Button)sender).Content;
            double left = this.Left;
            double top = this.Top;
            switch (mode)
            {
                case "Ajouter":
                    DocumentForm formDocumentAdd = new(this, _context, mode);
                    formDocumentAdd.Left = left;
                    formDocumentAdd.Top = top;
                    this.Visibility = Visibility.Hidden;
                    formDocumentAdd.Show();
                    break;
                case "Modifier":
                    if (dg.SelectedItem == null)
                    {
                        //Afficher window Erreur
                    }
                    else
                    {
                        DocumentForm formDocumentUp = new(this, _context, mode, D);
                        formDocumentUp.Left = left;
                        formDocumentUp.Top = top;
                        this.Visibility = Visibility.Hidden;
                        formDocumentUp.Show();
                    }
                    break;
                case "Supprimer":
                    this.Opacity = 0.25;
                    Suppression windowSupp = new Suppression();
                    windowSupp.Left = left;
                    windowSupp.Top = top;
                    if ((bool)windowSupp.ShowDialog())
                    {
                        _DocumentController.DeleteDocument(D.Id);
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
