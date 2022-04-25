using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;
using SuiviDesktop.Data.Models;

#nullable disable

namespace SuiviDesktop.Data
{
    public partial class MyDbContext : DbContext
    {
        public MyDbContext()
        {
        }

        public MyDbContext(DbContextOptions<MyDbContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Absence> Absences { get; set; }
        public virtual DbSet<Alternant> Alternants { get; set; }
        public virtual DbSet<Centre> Centres { get; set; }
        public virtual DbSet<DoctrineMigrationVersion> DoctrineMigrationVersions { get; set; }
        public virtual DbSet<Document> Documents { get; set; }
        public virtual DbSet<Evenement> Evenements { get; set; }
        public virtual DbSet<Formateur> Formateurs { get; set; }
        public virtual DbSet<Formation> Formations { get; set; }
        public virtual DbSet<LieuxEvenement> LieuxEvenements { get; set; }
        public virtual DbSet<ResetPasswordRequest> ResetPasswordRequests { get; set; }
        public virtual DbSet<ResponsablesLegaux> ResponsablesLegauxes { get; set; }
        public virtual DbSet<Tuteur> Tuteurs { get; set; }
        public virtual DbSet<TypesAbsence> TypesAbsences { get; set; }
        public virtual DbSet<TypesEvenement> TypesEvenements { get; set; }
        public virtual DbSet<User> Users { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
#warning To protect potentially sensitive information in your connection string, you should move it out of source code. You can avoid scaffolding the connection string by using the Name= syntax to read it from configuration - see https://go.microsoft.com/fwlink/?linkid=2131148. For more guidance on storing connection strings, see http://go.microsoft.com/fwlink/?LinkId=723263.
                optionsBuilder.UseMySQL("server=localhost;user=root;database=stageprojetsuivi;ssl mode=none");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Absence>(entity =>
            {
                entity.ToTable("absences");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.DateAbsence)
                    .HasColumnType("date")
                    .HasColumnName("date_absence");

                entity.Property(e => e.NbrHeureAbsence)
                    .HasColumnType("int(11)")
                    .HasColumnName("nbr_heure_absence");
            });

            modelBuilder.Entity<Alternant>(entity =>
            {
                entity.ToTable("alternants");

                entity.HasIndex(e => e.IdUserId, "UNIQ_B508067E79F37AE5")
                    .IsUnique();

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.IdUserId)
                    .HasColumnType("int(11)")
                    .HasColumnName("id_user_id");

                entity.HasOne(d => d.IdUser)
                    .WithOne(p => p.Alternant)
                    .HasForeignKey<Alternant>(d => d.IdUserId)
                    .HasConstraintName("FK_B508067E79F37AE5");
            });

            modelBuilder.Entity<Centre>(entity =>
            {
                entity.ToTable("centres");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.AdresseCentre)
                    .IsRequired()
                    .HasMaxLength(255)
                    .HasColumnName("adresse_centre");

                entity.Property(e => e.CompltAdresseCentre)
                    .HasMaxLength(255)
                    .HasColumnName("complt_adresse_centre");
            });

            modelBuilder.Entity<DoctrineMigrationVersion>(entity =>
            {
                entity.HasKey(e => e.Version)
                    .HasName("PRIMARY");

                entity.ToTable("doctrine_migration_versions");

                entity.Property(e => e.Version)
                    .HasMaxLength(191)
                    .HasColumnName("version");

                entity.Property(e => e.ExecutedAt).HasColumnName("executed_at");

                entity.Property(e => e.ExecutionTime)
                    .HasColumnType("int(11)")
                    .HasColumnName("execution_time");
            });

            modelBuilder.Entity<Document>(entity =>
            {
                entity.ToTable("documents");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.LibelleDocument)
                    .IsRequired()
                    .HasMaxLength(150)
                    .HasColumnName("libelle_document");
            });

            modelBuilder.Entity<Evenement>(entity =>
            {
                entity.ToTable("evenements");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.DateEvenement)
                    .HasColumnType("date")
                    .HasColumnName("date_evenement");

                entity.Property(e => e.HeureEvenement).HasColumnName("heure_evenement");
            });

            modelBuilder.Entity<Formateur>(entity =>
            {
                entity.ToTable("formateurs");

                entity.HasIndex(e => e.IdUserId, "UNIQ_FD80E57479F37AE5")
                    .IsUnique();

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.IdUserId)
                    .HasColumnType("int(11)")
                    .HasColumnName("id_user_id");

                entity.HasOne(d => d.IdUser)
                    .WithOne(p => p.Formateur)
                    .HasForeignKey<Formateur>(d => d.IdUserId)
                    .HasConstraintName("FK_FD80E57479F37AE5");
            });

            modelBuilder.Entity<Formation>(entity =>
            {
                entity.ToTable("formations");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.CodeTitreFormation)
                    .IsRequired()
                    .HasMaxLength(50)
                    .HasColumnName("code_titre_formation");

                entity.Property(e => e.DateFinValdteAggrmtFormation)
                    .HasColumnType("date")
                    .HasColumnName("date_fin_valdte_aggrmt_formation");

                entity.Property(e => e.DateParutionFormation)
                    .HasColumnType("date")
                    .HasColumnName("date_parution_formation");

                entity.Property(e => e.IntituleFormation)
                    .IsRequired()
                    .HasMaxLength(255)
                    .HasColumnName("intitule_formation");

                entity.Property(e => e.MillesimeFormation)
                    .HasColumnType("date")
                    .HasColumnName("millesime_formation");

                entity.Property(e => e.NsfFormation)
                    .IsRequired()
                    .HasMaxLength(10)
                    .HasColumnName("nsf_formation");

                entity.Property(e => e.RomeFormation)
                    .IsRequired()
                    .HasMaxLength(5)
                    .HasColumnName("rome_formation");

                entity.Property(e => e.SigleFormation)
                    .IsRequired()
                    .HasMaxLength(150)
                    .HasColumnName("sigle_formation");
            });

            modelBuilder.Entity<LieuxEvenement>(entity =>
            {
                entity.ToTable("lieux_evenement");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.LibelleLieuEvenement)
                    .IsRequired()
                    .HasMaxLength(50)
                    .HasColumnName("libelle_lieu_evenement");
            });

            modelBuilder.Entity<ResetPasswordRequest>(entity =>
            {
                entity.ToTable("reset_password_request");

                entity.HasIndex(e => e.UserId, "IDX_7CE748AA76ED395");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.ExpiresAt)
                    .HasColumnName("expires_at")
                    .HasComment("(DC2Type:datetime_immutable)");

                entity.Property(e => e.HashedToken)
                    .IsRequired()
                    .HasMaxLength(100)
                    .HasColumnName("hashed_token");

                entity.Property(e => e.RequestedAt)
                    .HasColumnName("requested_at")
                    .HasComment("(DC2Type:datetime_immutable)");

                entity.Property(e => e.Selector)
                    .IsRequired()
                    .HasMaxLength(20)
                    .HasColumnName("selector");

                entity.Property(e => e.UserId)
                    .HasColumnType("int(11)")
                    .HasColumnName("user_id");

                entity.HasOne(d => d.User)
                    .WithMany(p => p.ResetPasswordRequests)
                    .HasForeignKey(d => d.UserId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_7CE748AA76ED395");
            });

            modelBuilder.Entity<ResponsablesLegaux>(entity =>
            {
                entity.ToTable("responsables_legaux");

                entity.HasIndex(e => e.IdUserId, "UNIQ_3771A0C679F37AE5")
                    .IsUnique();

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.IdUserId)
                    .HasColumnType("int(11)")
                    .HasColumnName("id_user_id");

                entity.HasOne(d => d.IdUser)
                    .WithOne(p => p.ResponsablesLegaux)
                    .HasForeignKey<ResponsablesLegaux>(d => d.IdUserId)
                    .HasConstraintName("FK_3771A0C679F37AE5");
            });

            modelBuilder.Entity<Tuteur>(entity =>
            {
                entity.ToTable("tuteurs");

                entity.HasIndex(e => e.IdUserId, "UNIQ_5831674379F37AE5")
                    .IsUnique();

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.IdUserId)
                    .HasColumnType("int(11)")
                    .HasColumnName("id_user_id");

                entity.HasOne(d => d.IdUser)
                    .WithOne(p => p.Tuteur)
                    .HasForeignKey<Tuteur>(d => d.IdUserId)
                    .HasConstraintName("FK_5831674379F37AE5");
            });

            modelBuilder.Entity<TypesAbsence>(entity =>
            {
                entity.ToTable("types_absence");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.LibelleTypeAbsence)
                    .IsRequired()
                    .HasMaxLength(50)
                    .HasColumnName("libelle_type_absence");
            });

            modelBuilder.Entity<TypesEvenement>(entity =>
            {
                entity.ToTable("types_evenement");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.LibelleTypeEvenement)
                    .IsRequired()
                    .HasMaxLength(50)
                    .HasColumnName("libelle_type_evenement");
            });

            modelBuilder.Entity<User>(entity =>
            {
                entity.ToTable("user");

                entity.HasIndex(e => e.EmailUser, "UNIQ_8D93D64912A5F6CC")
                    .IsUnique();

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.AdresseUser)
                    .IsRequired()
                    .HasMaxLength(255)
                    .HasColumnName("adresse_user");

                entity.Property(e => e.CompltAdresseUser)
                    .HasMaxLength(255)
                    .HasColumnName("complt_adresse_user");

                entity.Property(e => e.DdnUser)
                    .IsRequired()
                    .HasMaxLength(255)
                    .HasColumnName("ddn_user");

                entity.Property(e => e.EmailUser)
                    .IsRequired()
                    .HasMaxLength(180)
                    .HasColumnName("email_user");

                entity.Property(e => e.IsVerified).HasColumnName("is_verified");

                entity.Property(e => e.NomUser)
                    .IsRequired()
                    .HasMaxLength(150)
                    .HasColumnName("nom_user");

                entity.Property(e => e.NumTelUser)
                    .HasColumnType("int(11)")
                    .HasColumnName("num_tel_user");

                entity.Property(e => e.Password)
                    .IsRequired()
                    .HasMaxLength(255)
                    .HasColumnName("password");

                entity.Property(e => e.PrenomUser)
                    .IsRequired()
                    .HasMaxLength(150)
                    .HasColumnName("prenom_user");

                entity.Property(e => e.Roles)
                    .IsRequired()
                    .HasColumnType("json")
                    .HasColumnName("roles");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
