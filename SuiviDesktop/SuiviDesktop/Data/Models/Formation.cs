using System;
using System.Collections.Generic;

#nullable disable

namespace SuiviDesktop.Data.Models
{
    public partial class Formation
    {
        public int Id { get; set; }
        public string SigleFormation { get; set; }
        public string IntituleFormation { get; set; }
        public string CodeTitreFormation { get; set; }
        public DateTime MillesimeFormation { get; set; }
        public DateTime DateParutionFormation { get; set; }
        public string NsfFormation { get; set; }
        public string RomeFormation { get; set; }
        public DateTime DateFinValdteAggrmtFormation { get; set; }
    }
}
