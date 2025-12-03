# Kemoterapiregime - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kemoterapiregime**

## ValueSet: Kemoterapiregime (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Kemoterapiregime | *Version*:2.15.0 |
| Active as of 2022-07-18 | *Computable Name*:Kemoterapiregime |

 
Kemoterapiregime (blanding af ATC, SKS og uspecifikke koder) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 96 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "Kemoterapiregime",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Kemoterapiregime",
  "version" : "2.15.0",
  "name" : "Kemoterapiregime",
  "title" : "Kemoterapiregime",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-18T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Kemoterapiregime (blanding af ATC, SKS og uspecifikke koder)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "BWHA167",
            "display" : "ABVD"
          },
          {
            "code" : "BWHA138",
            "display" : "BeaCOPP"
          },
          {
            "code" : "BWHA310",
            "display" : "BEAM"
          },
          {
            "code" : "BWHA165",
            "display" : "CHOEP"
          },
          {
            "code" : "BWHA119",
            "display" : "CHOP"
          },
          {
            "code" : "BWHA166",
            "display" : "CNOP"
          },
          {
            "code" : "BWHA134",
            "display" : "COP"
          },
          {
            "code" : "BWHA168",
            "display" : "LVPP"
          },
          {
            "code" : "BWHA258",
            "display" : "Maxi-CHOP (CTX 1200mg/m2 & doxorubicin 75mg/m2)"
          },
          {
            "code" : "BWHA120",
            "display" : "MIME"
          },
          {
            "code" : "BWHA137",
            "display" : "NOP"
          },
          {
            "code" : "BWHA156",
            "display" : "COPP"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ChemotherapyRegimen",
        "concept" : [
          {
            "code" : "abvd/copp",
            "display" : "ABVD/COPP"
          },
          {
            "code" : "acvbp",
            "display" : "ACVBP"
          },
          {
            "code" : "all_regime",
            "display" : "ALL regime"
          },
          {
            "code" : "adriamycin",
            "display" : "Adriamycin"
          },
          {
            "code" : "bac",
            "display" : "BAC (Bendamustin Ara-c)"
          },
          {
            "code" : "bfm",
            "display" : "BFM"
          },
          {
            "code" : "cap",
            "display" : "CAP"
          },
          {
            "code" : "ccvp",
            "display" : "CCVP"
          },
          {
            "code" : "chic",
            "display" : "CHIC"
          },
          {
            "code" : "chlorambucil_vinblastin_procarb",
            "display" : "Chlorambucil og Vinblastin og procarb"
          },
          {
            "code" : "cnsbonn",
            "display" : "CNSBONN"
          },
          {
            "code" : "cns_matrix",
            "display" : "CNS matrix"
          },
          {
            "code" : "cns_mvbp",
            "display" : "CNS MVBP"
          },
          {
            "code" : "cns_mvp",
            "display" : "CNS MVP"
          },
          {
            "code" : "codox_m/ivac",
            "display" : "CODOX-M/IVAC"
          },
          {
            "code" : "comp",
            "display" : "COMP"
          },
          {
            "code" : "cope",
            "display" : "COPE"
          },
          {
            "code" : "cvbp",
            "display" : "CVBP"
          },
          {
            "code" : "cvp",
            "display" : "CVP"
          },
          {
            "code" : "dexabeam",
            "display" : "DexaBEAM"
          },
          {
            "code" : "dhap",
            "display" : "DHAP og DHAoX"
          },
          {
            "code" : "ecapp",
            "display" : "ECAPP"
          },
          {
            "code" : "epoch",
            "display" : "EPOCH"
          },
          {
            "code" : "eshap",
            "display" : "ESHAP"
          },
          {
            "code" : "fcd",
            "display" : "FC (Fludarin & Cyclofosfamid +/- prednison)"
          },
          {
            "code" : "fnd",
            "display" : "FND (Fludarabin+Novantrone)"
          },
          {
            "code" : "gdp",
            "display" : "GDP"
          },
          {
            "code" : "gem_p_28",
            "display" : "GEM-P-28"
          },
          {
            "code" : "gemox",
            "display" : "GemOx"
          },
          {
            "code" : "hd_ara_c",
            "display" : "HD-Ara-C"
          },
          {
            "code" : "hd_ctx",
            "display" : "HD-CTX"
          },
          {
            "code" : "hd_ctx_vp16",
            "display" : "HD-CTX+VP16"
          },
          {
            "code" : "hd_vp16",
            "display" : "HD-VP16"
          },
          {
            "code" : "hd_mtx",
            "display" : "HD-MTX"
          },
          {
            "code" : "hyper_cvad",
            "display" : "Hyper-CVAD/IVAC"
          },
          {
            "code" : "ice",
            "display" : "ICE"
          },
          {
            "code" : "igev",
            "display" : "IGEV"
          },
          {
            "code" : "ike",
            "display" : "IKE"
          },
          {
            "code" : "ive",
            "display" : "IVE"
          },
          {
            "code" : "it_behandling",
            "display" : "IT-behandling"
          },
          {
            "code" : "macop_b",
            "display" : "MACOP-B"
          },
          {
            "code" : "mantle_2",
            "display" : "Mantle 2"
          },
          {
            "code" : "maxi_mime",
            "display" : "Maxi-MIME"
          },
          {
            "code" : "mini_beam",
            "display" : "Mini-BEAM"
          },
          {
            "code" : "mini_chop",
            "display" : "Mini-CHOP"
          },
          {
            "code" : "nopho",
            "display" : "NOPHO - alle varianter"
          },
          {
            "code" : "pix_etoposid_benda",
            "display" : "Pix-etoposid-Benda"
          },
          {
            "code" : "peroral_cytostatika",
            "display" : "Peroral cytostatika"
          },
          {
            "code" : "smile",
            "display" : "Smile"
          },
          {
            "code" : "triangle_mantle",
            "display" : "Triangle (Mantle)"
          },
          {
            "code" : "velbe",
            "display" : "Velbe"
          },
          {
            "code" : "velcade",
            "display" : "Velcade"
          },
          {
            "code" : "copdac",
            "display" : "COPDAC"
          },
          {
            "code" : "ebvp",
            "display" : "EBVP"
          },
          {
            "code" : "ipe",
            "display" : "IPE"
          },
          {
            "code" : "oepa",
            "display" : "OEPA"
          },
          {
            "code" : "oppa",
            "display" : "OPPA"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
        "concept" : [
          {
            "code" : "L01BC07",
            "display" : "Azacitidin"
          },
          {
            "code" : "L01AD01",
            "display" : "BCNU"
          },
          {
            "code" : "L01AA09",
            "display" : "Bendamustin"
          },
          {
            "code" : "L01DC01",
            "display" : "Bleomycin"
          },
          {
            "code" : "L01AA02",
            "display" : "Leukeran/Chlorambucil"
          },
          {
            "code" : "L01XA01",
            "display" : "Cisplatin"
          },
          {
            "code" : "L04AD01",
            "display" : "Ciclosporin og andre immunsupresiva"
          },
          {
            "code" : "L04AA40",
            "display" : "Cladribin"
          },
          {
            "code" : "L01AA01",
            "display" : "Cyclofosfamid"
          },
          {
            "code" : "L01AX04",
            "display" : "Darcabazin"
          },
          {
            "code" : "L01DB01",
            "display" : "Doxorubicin"
          },
          {
            "code" : "L01CB01",
            "display" : "Etopsid el Etopofos"
          },
          {
            "code" : "L01BB05",
            "display" : "Fludarabin"
          },
          {
            "code" : "L01BC05",
            "display" : "Gemcitabin"
          },
          {
            "code" : "L01EL01",
            "display" : "Ibrutinib (incl analoger)"
          },
          {
            "code" : "L01EM01",
            "display" : "Idelalisib (PI3K)"
          },
          {
            "code" : "L03AB",
            "display" : "Interferon"
          },
          {
            "code" : "L01AA06",
            "display" : "Ifosfamid"
          },
          {
            "code" : "L04AX04",
            "display" : "Lenalidomid og lign"
          },
          {
            "code" : "L01AA03",
            "display" : "Melphalan"
          },
          {
            "code" : "L01DB07",
            "display" : "Mitozantrone"
          },
          {
            "code" : "L01CA02",
            "display" : "Oncovin"
          },
          {
            "code" : "L01DB11",
            "display" : "Pixantrone"
          },
          {
            "code" : "L01AX03",
            "display" : "Temozolomid"
          },
          {
            "code" : "L04AX02",
            "display" : "Thalidomid"
          },
          {
            "code" : "L01XX52",
            "display" : "Venetoclax"
          },
          {
            "code" : "L01XH01",
            "display" : "Vorinostat"
          }
        ]
      }
    ]
  }
}

```
