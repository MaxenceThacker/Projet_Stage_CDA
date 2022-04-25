using System;
using System.Collections.Generic;

#nullable disable

namespace ProjetSuiviDesktop.Data.Models
{
    public partial class ResetPasswordRequest
    {
        public int Id { get; set; }
        public int UserId { get; set; }
        public string Selector { get; set; }
        public string HashedToken { get; set; }
        public DateTime RequestedAt { get; set; }
        public DateTime ExpiresAt { get; set; }

        public virtual User User { get; set; }
    }
}
