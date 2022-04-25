using AutoMapper;
using Microsoft.AspNetCore.Mvc;
using SuiviDesktop.Data;
using SuiviDesktop.Data.Dtos;
using SuiviDesktop.Data.Models;
using SuiviDesktop.Data.Profiles;
using SuiviDesktop.Data.Services;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SuiviDesktop.Controllers
{
    class DocumentController : ControllerBase
    {

        private readonly DocumentServices _service;
        private readonly IMapper _mapper;

        public DocumentController(MyDbContext _context)
        {
            _service = new DocumentServices(_context);
            var config = new MapperConfiguration(cfg =>
            {
                cfg.AddProfile<DocumentProfile>();
            });
            _mapper = config.CreateMapper();
        }

        //GET api/Document
        public IEnumerable<DocumentDTOOut> GetAllDocument()
        {
            IEnumerable<Document> listeDocument = _service.GetAllDocument();
            return _mapper.Map<IEnumerable<DocumentDTOOut>>(listeDocument);
        }

        //GET api/Document/{i}
        public ActionResult<DocumentDTOOut> GetDocumentById(int id)
        {
            Document commandItem = _service.GetDocumentById(id);
            if (commandItem != null)
            {
                return Ok(_mapper.Map<DocumentDTOOut>(commandItem));
            }
            return NotFound();
        }

        //POST api/Document
        public void CreateDocument(DocumentDTOIn objIn)
        {
            Document obj = _mapper.Map<Document>(objIn);
            _service.AddDocument(obj);
        }

        //POST api/Document/{id}
        public ActionResult UpdateDocument(int id, DocumentDTOIn obj)
        {
            Document objFromRepo = _service.GetDocumentById(id);
            if (objFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(obj, objFromRepo);
            _service.UpdateDocument(objFromRepo);
            return NoContent();
        }

        //DELETE api/Document/{id}
        public ActionResult DeleteDocument(int id)
        {
            Document obj = _service.GetDocumentById(id);
            if (obj == null)
            {
                return NotFound();
            }
            _service.DeleteDocument(obj);
            return NoContent();
        }

    }
}
