# Chemotherapy regimen - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Chemotherapy regimen**

## CodeSystem: Chemotherapy regimen 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ChemotherapyRegimen | *Version*:2.16.0 |
| Active as of 2022-07-15 | *Computable Name*:ChemotherapyRegimen |

 
Chemotherapy regimen 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Kemoterapiregime](ValueSet-Kemoterapiregime.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ChemotherapyRegimen",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ChemotherapyRegimen",
  "version" : "2.16.0",
  "name" : "ChemotherapyRegimen",
  "title" : "Chemotherapy regimen",
  "status" : "active",
  "date" : "2022-07-15T00:00:00+02:00",
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
  "description" : "Chemotherapy regimen",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 59,
  "concept" : [
    {
      "code" : "abvd",
      "display" : "ABVD",
      "definition" : "ABVD / SKS: BWHA167"
    },
    {
      "code" : "copp",
      "display" : "COPP",
      "definition" : "COPP / SKS: BWHA156"
    },
    {
      "code" : "abvd/copp",
      "display" : "ABVD/COPP",
      "definition" : "ABVD/COPP"
    },
    {
      "code" : "acvbp",
      "display" : "ACVBP",
      "definition" : "ACVBP"
    },
    {
      "code" : "all_regime",
      "display" : "ALL regime",
      "definition" : "ALL regime"
    },
    {
      "code" : "adriamycin",
      "display" : "Adriamycin",
      "definition" : "Adriamycin"
    },
    {
      "code" : "bac",
      "display" : "BAC",
      "definition" : "BAC (Bendamustin Ara-c)"
    },
    {
      "code" : "bfm",
      "display" : "BFM",
      "definition" : "BFM"
    },
    {
      "code" : "cap",
      "display" : "CAP",
      "definition" : "CAP"
    },
    {
      "code" : "ccvp",
      "display" : "CCVP",
      "definition" : "CCVP"
    },
    {
      "code" : "chic",
      "display" : "CHIC",
      "definition" : "CHIC"
    },
    {
      "code" : "chlorambucil_vinblastin_procarb",
      "display" : "Chlorambucil og Vinblastin og procarb",
      "definition" : "Chlorambucil og Vinblastin og procarb"
    },
    {
      "code" : "cnsbonn",
      "display" : "CNSBONN",
      "definition" : "CNSBONN"
    },
    {
      "code" : "cns_matrix",
      "display" : "CNS matrix",
      "definition" : "CNS matrix"
    },
    {
      "code" : "cns_mvbp",
      "display" : "CNS MVBP",
      "definition" : "CNS MVBP"
    },
    {
      "code" : "cns_mvp",
      "display" : "CNS MVP",
      "definition" : "CNS MVP"
    },
    {
      "code" : "codox_m/ivac",
      "display" : "CODOX-M/IVAC",
      "definition" : "CODOX-M/IVAC"
    },
    {
      "code" : "comp",
      "display" : "COMP",
      "definition" : "COMP"
    },
    {
      "code" : "cope",
      "display" : "COPE",
      "definition" : "COPE"
    },
    {
      "code" : "cvbp",
      "display" : "CVBP",
      "definition" : "CVBP"
    },
    {
      "code" : "cvp",
      "display" : "CVP",
      "definition" : "CVP"
    },
    {
      "code" : "dexabeam",
      "display" : "DexaBEAM",
      "definition" : "DexaBEAM"
    },
    {
      "code" : "dhap",
      "display" : "DHAP",
      "definition" : "DHAP"
    },
    {
      "code" : "ecapp",
      "display" : "ECAPP",
      "definition" : "ECAPP"
    },
    {
      "code" : "epoch",
      "display" : "EPOCH",
      "definition" : "EPOCH"
    },
    {
      "code" : "eshap",
      "display" : "ESHAP",
      "definition" : "ESHAP"
    },
    {
      "code" : "fcd",
      "display" : "FCD",
      "definition" : "FCD"
    },
    {
      "code" : "fnd",
      "display" : "FND",
      "definition" : "FND"
    },
    {
      "code" : "gdp",
      "display" : "GDP",
      "definition" : "GDP"
    },
    {
      "code" : "gem_p_28",
      "display" : "GEM-P-28",
      "definition" : "GEM-P-28"
    },
    {
      "code" : "gemox",
      "display" : "GemOx",
      "definition" : "GemOx"
    },
    {
      "code" : "hd_ara_c",
      "display" : "HD-Ara-C",
      "definition" : "HD-Ara-C"
    },
    {
      "code" : "hd_ctx",
      "display" : "HD-CTX",
      "definition" : "HD-CTX"
    },
    {
      "code" : "hd_ctx_vp16",
      "display" : "HD-CTX+VP16",
      "definition" : "HD-CTX+VP16"
    },
    {
      "code" : "hd_vp16",
      "display" : "HD-VP16",
      "definition" : "HD-VP16"
    },
    {
      "code" : "hd_mtx",
      "display" : "HD-MTX",
      "definition" : "HD-MTX"
    },
    {
      "code" : "hyper_cvad",
      "display" : "Hyper-CVAD/IVAC",
      "definition" : "Hyper-CVAD/IVAC"
    },
    {
      "code" : "ice",
      "display" : "ICE",
      "definition" : "ICE"
    },
    {
      "code" : "igev",
      "display" : "IGEV",
      "definition" : "IGEV"
    },
    {
      "code" : "ike",
      "display" : "IKE",
      "definition" : "IKE"
    },
    {
      "code" : "ive",
      "display" : "IVE",
      "definition" : "IVE"
    },
    {
      "code" : "it_behandling",
      "display" : "IT-behandling",
      "definition" : "IT-behandling"
    },
    {
      "code" : "macop_b",
      "display" : "MACOP-B",
      "definition" : "MACOP-b"
    },
    {
      "code" : "mantle_2",
      "display" : "Mantle 2",
      "definition" : "Mantle 2"
    },
    {
      "code" : "maxi_mime",
      "display" : "Maxi-MIME",
      "definition" : "Maxi-MIME"
    },
    {
      "code" : "mini_beam",
      "display" : "Mini-BEAM",
      "definition" : "Mini-BEAM"
    },
    {
      "code" : "mini_chop",
      "display" : "Mini-CHOP",
      "definition" : "Mini-CHOP"
    },
    {
      "code" : "nopho",
      "display" : "NOPHO",
      "definition" : "NOPHO"
    },
    {
      "code" : "pix_etoposid_benda",
      "display" : "Pix-etoposid-Benda",
      "definition" : "Pix-etoposid-Benda"
    },
    {
      "code" : "peroral_cytostatika",
      "display" : "Peroral cytostatika",
      "definition" : "Peroral cytostatika"
    },
    {
      "code" : "smile",
      "display" : "Smile",
      "definition" : "Smile"
    },
    {
      "code" : "triangle_mantle",
      "display" : "Triangle (Mantle)",
      "definition" : "Triangle (Mantle)"
    },
    {
      "code" : "velbe",
      "display" : "Velbe",
      "definition" : "Velbe"
    },
    {
      "code" : "velcade",
      "display" : "Velcade",
      "definition" : "Velcade"
    },
    {
      "code" : "copdac",
      "display" : "COPDAC",
      "definition" : "COPDAC"
    },
    {
      "code" : "ebvp",
      "display" : "EBVP",
      "definition" : "EBVP"
    },
    {
      "code" : "ipe",
      "display" : "IPE",
      "definition" : "IPE"
    },
    {
      "code" : "oepa",
      "display" : "OEPA",
      "definition" : "OEPA"
    },
    {
      "code" : "oppa",
      "display" : "OPPA",
      "definition" : "OPPA"
    }
  ]
}

```
