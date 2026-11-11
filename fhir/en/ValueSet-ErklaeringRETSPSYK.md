# Erklæring (RETSPSYK) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Erklæring (RETSPSYK)**

## ValueSet: Erklæring (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ErklaeringRETSPSYK | *Version*:2.27.2 |
| Active as of 2022-09-30 | *Computable Name*:ErklaeringRETSPSYK |

 
Erklæring (RETSPSYK) 

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
  "id" : "ErklaeringRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ErklaeringRETSPSYK",
  "version" : "2.27.2",
  "name" : "ErklaeringRETSPSYK",
  "title" : "Erklæring (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Erklæring (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MentalDeclaration",
      "concept" : [{
        "code" : "new_mental_examination",
        "display" : "Ny mentalundersøgelse er foretaget i forbindelse med aktuelle dom"
      },
      {
        "code" : "previous_mental_examination",
        "display" : "Der foreligger mentalundersøgelse fra tidligere, der anvendes i aktuel sag"
      },
      {
        "code" : "statement",
        "display" : "Udtalelse givet efter igangværende undersøgelse af behandlingsansvarlig i henhold til dom"
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
