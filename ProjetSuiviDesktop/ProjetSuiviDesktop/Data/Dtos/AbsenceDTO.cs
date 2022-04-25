using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProjetSuiviDesktop.Data.Dtos
{
    public class AbsenceDTOIn
    {
        public DateTime DateAbsence { get; set; }
        public int NbrHeureAbsence { get; set; }
        public string Justification { get; set; }
    }

    public class AbsenceDTOOut
    {
        public int Id { get; set; }
        public DateTime DateAbsence { get; set; }
        public int NbrHeureAbsence { get; set; }
        public string Justification { get; set; }
    }
}
