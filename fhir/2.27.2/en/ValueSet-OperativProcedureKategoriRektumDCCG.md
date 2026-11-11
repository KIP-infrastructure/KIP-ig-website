# Operativ procedurekategori (Rektum) (DCCG) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operativ procedurekategori (Rektum) (DCCG)**

## ValueSet: Operativ procedurekategori (Rektum) (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperativProcedureKategoriRektumDCCG | *Version*:2.27.2 |
| Active as of 2023-04-13 | *Computable Name*:OperativProcedureKategoriRektumDCCG |

 
Operativ procedurekategori (Rektum) (DCCG) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "OperativProcedureKategoriRektumDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperativProcedureKategoriRektumDCCG",
  "version" : "2.27.2",
  "name" : "OperativProcedureKategoriRektumDCCG",
  "title" : "Operativ procedurekategori (Rektum) (DCCG)",
  "status" : "active",
  "date" : "2023-04-13T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Operativ procedurekategori (Rektum) (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "tumor_resection",
        "display" : "Resektion af tumorbærende tarmsegment"
      },
      {
        "code" : "local_resection_ex_tes",
        "display" : "Endoskopisk lokalresektion ekskl. TES"
      },
      {
        "code" : "local_resection_tes",
        "display" : "Transanal endoskopisk resektion (TES)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden/aflastende procedure"
      },
      {
        "code" : "not_performed",
        "display" : "Planlagt operation ikke gennemført"
      }]
    }]
  }
}

```
