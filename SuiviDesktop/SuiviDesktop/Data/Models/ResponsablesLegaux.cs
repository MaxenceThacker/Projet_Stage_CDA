﻿using System;
using System.Collections.Generic;

#nullable disable

namespace SuiviDesktop.Data.Models
{
    public partial class ResponsablesLegaux
    {
        public int Id { get; set; }
        public int? IdUserId { get; set; }

        public virtual User IdUser { get; set; }
    }
}
