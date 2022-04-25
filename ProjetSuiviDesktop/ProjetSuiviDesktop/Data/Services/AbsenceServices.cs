using ProjetSuiviDesktop.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProjetSuiviDesktop.Data.Services
{
    class AbsenceServices
    {

        private readonly MyDbContext _context;

        public AbsenceServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddAbsence(Absence obj)
        {
            if (obj == null)
            {
                throw new ArgumentNullException(nameof(obj));
            }
            _context.Absences.Add(obj);
            _context.SaveChanges();
        }

        public void DeleteAbsence(Absence obj)
        {
            if (obj == null)
            {
                throw new ArgumentNullException(nameof(obj));
            }
            _context.Absences.Remove(obj);
            _context.SaveChanges();
        }

        public IEnumerable<Absence> GetAllAbsence()
        {
            return _context.Absences.ToList();
        }

        public Absence GetAbsenceById(int id)
        {
            return _context.Absences.FirstOrDefault(obj => obj.Id == id);
        }

        public void UpdateAbsence(Absence obj)
        {
            _context.SaveChanges();
        }
    }
}
