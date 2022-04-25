using ProjetSuiviDesktop.Data;
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
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace ProjetSuiviDesktop
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MyDbContext _context { get; set; } = new();

        public MainWindow()
        {
            InitializeComponent();
        }

        private void OpenWindow(object sender, RoutedEventArgs e)
        {
            string NameWindow = (string)((Button)sender).Content;
            double left = this.Left;
            double top = this.Top;
            switch (NameWindow)
            {
                case "Absence":
                    Absences AbsenceWindow = new(this, _context);
                    AbsenceWindow.Left = left;
                    AbsenceWindow.Top = top;
                    this.Visibility = Visibility.Hidden;
                    AbsenceWindow.ShowDialog();
                    this.Visibility = Visibility.Visible;
                    break;
                case "Document":
                    Documents DocumentWindow = new(this, _context);
                    DocumentWindow.Left = left;
                    DocumentWindow.Top = top;
                    this.Visibility = Visibility.Hidden;
                    DocumentWindow.ShowDialog();
                    this.Visibility = Visibility.Visible;
                    break;
                default:
                    break;
            }
        }
    }
}