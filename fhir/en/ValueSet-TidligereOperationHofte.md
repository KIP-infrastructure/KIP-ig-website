# Tidligere operation hofte (hoftealloplastik) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tidligere operation hofte (hoftealloplastik)**

## ValueSet: Tidligere operation hofte (hoftealloplastik) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TidligereOperationHofte | *Version*:2.27.3 |
| Active as of 2022-07-04 | *Computable Name*:TidligereOperationHofte |

 
Tidligere operation hofte (hoftealloplastik) 

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
  "id" : "TidligereOperationHofte",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TidligereOperationHofte",
  "version" : "2.27.3",
  "name" : "TidligereOperationHofte",
  "title" : "Tidligere operation hofte (hoftealloplastik)",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Tidligere operation hofte (hoftealloplastik)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AlloplastyTypes",
      "concept" : [{
        "code" : "periacetabular_osteotomy",
        "display" : "Periacetabulær osteotomi"
      },
      {
        "code" : "osteosynthesis",
        "display" : "Osteosyntese pga. proksimal femurfraktur"
      },
      {
        "code" : "hemialloplasty",
        "display" : "Hemialloplastik"
      },
      {
        "code" : "acetabulum_fracture",
        "display" : "Operation for acetabulumfraktur"
      },
      {
        "code" : "proximal_femur_osteotomy",
        "display" : "Proksimal femurosteotomi"
      },
      {
        "code" : "total_alloplasty",
        "display" : "Total alloplastik"
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
