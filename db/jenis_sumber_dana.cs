using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Pengelolaandana
{
    #region Jenis_sumber_dana
    public class Jenis_sumber_dana
    {
        #region Member Variables
        protected int _id_jenis_sumber_dana;
        protected string _nama_jenis_sumber_dana;
        #endregion
        #region Constructors
        public Jenis_sumber_dana() { }
        public Jenis_sumber_dana(string nama_jenis_sumber_dana)
        {
            this._nama_jenis_sumber_dana=nama_jenis_sumber_dana;
        }
        #endregion
        #region Public Properties
        public virtual int Id_jenis_sumber_dana
        {
            get {return _id_jenis_sumber_dana;}
            set {_id_jenis_sumber_dana=value;}
        }
        public virtual string Nama_jenis_sumber_dana
        {
            get {return _nama_jenis_sumber_dana;}
            set {_nama_jenis_sumber_dana=value;}
        }
        #endregion
    }
    #endregion
}