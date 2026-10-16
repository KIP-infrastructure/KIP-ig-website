# Implantat - materiale (keramik, metal, andet) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantat - materiale (keramik, metal, andet)**

## ValueSet: Implantat - materiale (keramik, metal, andet) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ImplantatMaterialeKeramikMetalAndet | *Version*:2.27.0 |
| Active as of 2022-11-02 | *Computable Name*:ImplantatMaterialeKeramikMetalAndet |

 
Implantat - materiale (keramik, metal, andet) 

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
  "id" : "ImplantatMaterialeKeramikMetalAndet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ImplantatMaterialeKeramikMetalAndet",
  "version" : "2.27.0",
  "name" : "ImplantatMaterialeKeramikMetalAndet",
  "title" : "Implantat - materiale (keramik, metal, andet)",
  "status" : "active",
  "date" : "2022-11-02T00:00:00+02:00",
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
  "description" : "Implantat - materiale (keramik, metal, andet)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "ceramics",
        "display" : "Keramik"
      },
      {
        "code" : "metal",
        "display" : "Metal"
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
