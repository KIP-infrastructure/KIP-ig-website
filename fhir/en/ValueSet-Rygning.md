# Rygning - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Rygning**

## ValueSet: Rygning 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Rygning | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:Rygning |

 
Udfald for rygning 

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
  "id" : "Rygning",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Rygning",
  "version" : "2.27.0",
  "name" : "Rygning",
  "title" : "Rygning",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Udfald for rygning",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Smoking",
      "concept" : [{
        "code" : "smoker",
        "display" : "Ryger"
      },
      {
        "code" : "formersmoker",
        "display" : "Tidligere ryger"
      },
      {
        "code" : "never-smoker",
        "display" : "Aldrig ryger"
      }]
    }]
  }
}

```
