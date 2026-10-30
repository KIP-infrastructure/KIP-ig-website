# Operativ Procedurekategori (DCCG) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operativ Procedurekategori (DCCG)**

## ValueSet: Operativ Procedurekategori (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperativProcedureKategoriDCCG | *Version*:2.27.1 |
| Retired as of 2022-11-09 | *Computable Name*:OperativProcedureKategoriDCCG |

 
Operativ Procedurekategori (DCCG) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansions are not generated for retired value sets

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "OperativProcedureKategoriDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperativProcedureKategoriDCCG",
  "version" : "2.27.1",
  "name" : "OperativProcedureKategoriDCCG",
  "title" : "Operativ Procedurekategori (DCCG)",
  "status" : "retired",
  "date" : "2022-11-09T00:00:00+02:00",
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
  "description" : "Operativ Procedurekategori (DCCG)",
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
