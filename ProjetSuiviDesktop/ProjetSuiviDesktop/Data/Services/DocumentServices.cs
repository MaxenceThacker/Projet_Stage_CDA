using ProjetSuiviDesktop.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProjetSuiviDesktop.Data.Services
{
    class DocumentServices
    {

        private readonly MyDbContext _context;

        public DocumentServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddDocument(Document obj)
        {
            if (obj == null)
            {
                throw new ArgumentNullException(nameof(obj));
            }
            _context.Documents.Add(obj);
            _context.SaveChanges();
        }

        public void DeleteDocument(Document obj)
        {
            if (obj == null)
            {
                throw new ArgumentNullException(nameof(obj));
            }
            _context.Documents.Remove(obj);
            _context.SaveChanges();
        }

        public IEnumerable<Document> GetAllDocument()
        {
            return _context.Documents.ToList();
        }

        public Document GetDocumentById(int id)
        {
            return _context.Documents.FirstOrDefault(obj => obj.Id == id);
        }

        public void UpdateDocument(Document obj)
        {
            _context.SaveChanges();
        }
    }
}
