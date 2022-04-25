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
