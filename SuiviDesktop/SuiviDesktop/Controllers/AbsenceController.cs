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
    class AbsenceController : ControllerBase
    {

        private readonly AbsenceServices _service;
        private readonly IMapper _mapper;

        public AbsenceController(MyDbContext _context)
        {
            _service = new AbsenceServices(_context);
            var config = new MapperConfiguration(cfg =>
            {
                cfg.AddProfile<AbsenceProfile>();
            });
            _mapper = config.CreateMapper();
        }

        //GET api/Absence
        public IEnumerable<AbsenceDTOOut> GetAllAbsence()
        {
            IEnumerable<Absence> listeAbsence = _service.GetAllAbsence();
            return _mapper.Map<IEnumerable<AbsenceDTOOut>>(listeAbsence);
        }

        //GET api/Absence/{i}
        public ActionResult<AbsenceDTOOut> GetAbsenceById(int id)
        {
            Absence commandItem = _service.GetAbsenceById(id);
            if (commandItem != null)
            {
                return Ok(_mapper.Map<AbsenceDTOOut>(commandItem));
            }
            return NotFound();
        }

        //POST api/Absence
        public void CreateAbsence(AbsenceDTOIn objIn)
        {
            Absence obj = _mapper.Map<Absence>(objIn);
            _service.AddAbsence(obj);
        }

        //POST api/Absence/{id}
        public ActionResult UpdateAbsence(int id, AbsenceDTOIn obj)
        {
            Absence objFromRepo = _service.GetAbsenceById(id);
            if (objFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(obj, objFromRepo);
            _service.UpdateAbsence(objFromRepo);
            return NoContent();
        }

        //DELETE api/Absence/{id}
        public ActionResult DeleteAbsence(int id)
        {
            Absence obj = _service.GetAbsenceById(id);
            if (obj == null)
            {
                return NotFound();
            }
            _service.DeleteAbsence(obj);
            return NoContent();
        }

    }
}
