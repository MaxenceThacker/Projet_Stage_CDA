using System;
using System.Collections.Generic;

#nullable disable

namespace ProjetSuiviDesktop.Data.Models
{
    public partial class DoctrineMigrationVersion
    {
        public string Version { get; set; }
        public DateTime? ExecutedAt { get; set; }
        public int? ExecutionTime { get; set; }
    }
}
