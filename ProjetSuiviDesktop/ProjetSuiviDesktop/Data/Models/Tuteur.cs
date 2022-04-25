using System;
using System.Collections.Generic;

#nullable disable

namespace ProjetSuiviDesktop.Data.Models
{
    public partial class Tuteur
    {
        public int Id { get; set; }
        public int? IdUserId { get; set; }

        public virtual User IdUser { get; set; }
    }
}
