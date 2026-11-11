# Boligform - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Boligform**

## ValueSet: Boligform 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Boligform | *Version*:2.27.3 |
| Active as of 2022-09-06 | *Computable Name*:Boligform |

 
Patientens boligform 

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
  "id" : "Boligform",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Boligform",
  "version" : "2.27.3",
  "name" : "Boligform",
  "title" : "Boligform",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Patientens boligform",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MaritalStatus",
      "concept" : [{
        "code" : "livingalone",
        "display" : "Alene"
      },
      {
        "code" : "livingalone_child",
        "display" : "Med børn"
      },
      {
        "code" : "married",
        "display" : "Med ægtefælle/partner"
      },
      {
        "code" : "married_child",
        "display" : "Med ægtefælle/partner og børn"
      },
      {
        "code" : "living_parents",
        "display" : "Med forældre"
      },
      {
        "code" : "cohabitant",
        "display" : "Samboende med andre"
      }]
    }]
  }
}

```
