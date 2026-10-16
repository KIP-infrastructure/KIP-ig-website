# Tidligere operation (DKR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tidligere operation (DKR)**

## ValueSet: Tidligere operation (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TidligereOperationDKR | *Version*:2.27.0 |
| Active as of 2022-10-12 | *Computable Name*:TidligereOperationDKR |

 
Tidligere operation (DKR) 

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
  "id" : "TidligereOperationDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TidligereOperationDKR",
  "version" : "2.27.0",
  "name" : "TidligereOperationDKR",
  "title" : "Tidligere operation (DKR)",
  "status" : "active",
  "date" : "2022-10-12T00:00:00+02:00",
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
  "description" : "Tidligere operation (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "meniscetomy",
        "display" : "Partiel eller total meniskektomi"
      },
      {
        "code" : "arthroscopy",
        "display" : "Artroskopi med house cleaning"
      },
      {
        "code" : "reconstruction_cruciate_ligaments",
        "display" : "Korsbåndsrekonstruktion"
      },
      {
        "code" : "proximal_tibial_osteotomy",
        "display" : "Proksimal tibiaosteotomi"
      },
      {
        "code" : "osteosynthesis_condyle_fracture",
        "display" : "Osteosyntese af kondylfraktur"
      },
      {
        "code" : "patellectomy",
        "display" : "Patellektomi"
      },
      {
        "code" : "arthrodesis",
        "display" : "Artrodese"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
