using System;
using System.Collections.Generic;

#nullable disable

namespace ProjetSuiviDesktop.Data.Models
{
    public partial class User
    {
        public User()
        {
            ResetPasswordRequests = new HashSet<ResetPasswordRequest>();
        }

        public int Id { get; set; }
        public string EmailUser { get; set; }
        public string Roles { get; set; }
        public string Password { get; set; }
        public bool IsVerified { get; set; }
        public string NomUser { get; set; }
        public string PrenomUser { get; set; }
        public DateTime DdnUser { get; set; }
        public string AdresseUser { get; set; }
        public string CompltAdresseUser { get; set; }
        public int NumTelUser { get; set; }

        public virtual Alternant Alternant { get; set; }
        public virtual Formateur Formateur { get; set; }
        public virtual ResponsablesLegaux ResponsablesLegaux { get; set; }
        public virtual Tuteur Tuteur { get; set; }
        public virtual ICollection<ResetPasswordRequest> ResetPasswordRequests { get; set; }
    }
}
