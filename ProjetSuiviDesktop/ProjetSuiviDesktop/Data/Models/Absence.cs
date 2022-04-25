using System;
using System.Collections.Generic;

#nullable disable

namespace ProjetSuiviDesktop.Data.Models
{
    public partial class Absence
    {
        public int Id { get; set; }
        public DateTime DateAbsence { get; set; }
        public int NbrHeureAbsence { get; set; }
        public string Justification { get; set; }
    }
}
