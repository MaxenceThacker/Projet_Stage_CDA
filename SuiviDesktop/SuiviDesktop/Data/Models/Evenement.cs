using System;
using System.Collections.Generic;

#nullable disable

namespace SuiviDesktop.Data.Models
{
    public partial class Evenement
    {
        public int Id { get; set; }
        public TimeSpan HeureEvenement { get; set; }
        public DateTime DateEvenement { get; set; }
    }
}
