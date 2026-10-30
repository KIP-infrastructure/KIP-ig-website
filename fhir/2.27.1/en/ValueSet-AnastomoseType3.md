# Anastomosetype 3 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosetype 3**

## ValueSet: Anastomosetype 3 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType3 | *Version*:2.27.1 |
| Active as of 2022-10-11 | *Computable Name*:AnastomoseType3 |

 
Anastomosetype 3 

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
  "id" : "AnastomoseType3",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType3",
  "version" : "2.27.1",
  "name" : "AnastomoseType3",
  "title" : "Anastomosetype 3",
  "status" : "active",
  "date" : "2022-10-11T00:00:00+02:00",
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
  "description" : "Anastomosetype 3",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisType",
      "concept" : [{
        "code" : "end_to_end",
        "display" : "End-to-end"
      },
      {
        "code" : "side_to_end",
        "display" : "Side-to-end"
      },
      {
        "code" : "end_to_side",
        "display" : "End-to-side"
      },
      {
        "code" : "side_to_side",
        "display" : "Side-to-side"
      },
      {
        "code" : "functional_end_to_end",
        "display" : "Funktionel end-to-end"
      },
      {
        "code" : "pouch",
        "display" : "Pouch"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
