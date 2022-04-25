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
    public class DocumentProfile : Profile
    {
        public DocumentProfile()
        {
            CreateMap<DocumentDTOIn, Document>();
            CreateMap<Document, DocumentDTOIn>();
            CreateMap<DocumentDTOOut, Document>();
            CreateMap<Document, DocumentDTOOut>();
        }
    }
}
