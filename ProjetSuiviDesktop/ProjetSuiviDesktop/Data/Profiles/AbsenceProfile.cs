using AutoMapper;
using ProjetSuiviDesktop.Data.Dtos;
using ProjetSuiviDesktop.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProjetSuiviDesktop.Data.Profiles
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
