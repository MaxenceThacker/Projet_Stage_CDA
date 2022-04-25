using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SuiviDesktop.Data.Dtos
{
    public class DocumentDTOIn
    {
        public string LibelleDocument { get; set; }
    }

    public class DocumentDTOOut
    {
        public int Id { get; set; }
        public string LibelleDocument { get; set; }
    }
}
