# Transplantation - Transplant/Cage/Augment (DHR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transplantation - Transplant/Cage/Augment (DHR)**

## ValueSet: Transplantation - Transplant/Cage/Augment (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TransplantationCageAugmentDHR | *Version*:2.27.0 |
| Active as of 2022-11-07 | *Computable Name*:TransplantationCageAugmentDHR |

 
Transplantation - Transplantation/Cage/Augment (DHR) 

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
  "id" : "TransplantationCageAugmentDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TransplantationCageAugmentDHR",
  "version" : "2.27.0",
  "name" : "TransplantationCageAugmentDHR",
  "title" : "Transplantation - Transplant/Cage/Augment (DHR)",
  "status" : "active",
  "date" : "2022-11-07T00:00:00+02:00",
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
  "description" : "Transplantation - Transplantation/Cage/Augment (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "transplant",
        "display" : "Knogletransplantation"
      },
      {
        "code" : "cage",
        "display" : "Anvendelse af cage"
      },
      {
        "code" : "augments",
        "display" : "Anvendelse af augments"
      }]
    }]
  }
}

```
