using AutoMapper;
using SuiviDesktop.Data.Dtos;
using SuiviDesktop.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SuiviDesktop.Data.Profiles
{
    public class AbsenceProfile : Profile
    {
        public AbsenceProfile()
        {
            CreateMap<AbsenceDTOIn, Absence>();
            CreateMap<Absence, AbsenceDTOIn>();
            CreateMap<AbsenceDTOOut, Absence>();
            CreateMap<Absence, AbsenceDTOOut>();
        }
    }
}
