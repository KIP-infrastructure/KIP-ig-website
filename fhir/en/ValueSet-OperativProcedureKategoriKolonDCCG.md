# Operativ Procedurekategori (Kolon) (DCCG) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operativ Procedurekategori (Kolon) (DCCG)**

## ValueSet: Operativ Procedurekategori (Kolon) (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperativProcedureKategoriKolonDCCG | *Version*:2.27.3 |
| Active as of 2023-04-13 | *Computable Name*:OperativProcedureKategoriKolonDCCG |

 
Operativ Procedurekategori (Kolon) (DCCG) 

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
  "id" : "OperativProcedureKategoriKolonDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperativProcedureKategoriKolonDCCG",
  "version" : "2.27.3",
  "name" : "OperativProcedureKategoriKolonDCCG",
  "title" : "Operativ Procedurekategori (Kolon) (DCCG)",
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
  "description" : "Operativ Procedurekategori (Kolon) (DCCG)",
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
