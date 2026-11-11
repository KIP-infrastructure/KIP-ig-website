# Skematype - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Skematype**

## ValueSet: Skematype 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Skematype | *Version*:2.27.2 |
| Active as of 2022-09-06 | *Computable Name*:Skematype |

 
Indleveringsform for eksterne skemaer 

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
  "id" : "Skematype",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Skematype",
  "version" : "2.27.2",
  "name" : "Skematype",
  "title" : "Skematype",
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
  "description" : "Indleveringsform for eksterne skemaer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "paper_report",
        "display" : "Papir"
      },
      {
        "code" : "electronic_report",
        "display" : "Elektronisk"
      }]
    }]
  }
}

```
