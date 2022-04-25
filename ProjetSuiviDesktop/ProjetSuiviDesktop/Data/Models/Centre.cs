using System;
using System.Collections.Generic;

#nullable disable

namespace ProjetSuiviDesktop.Data.Models
{
    public partial class Centre
    {
        public int Id { get; set; }
        public string AdresseCentre { get; set; }
        public string CompltAdresseCentre { get; set; }
        public string NomCentre { get; set; }
    }
}
