# Livstatus - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Livstatus**

## ValueSet: Livstatus 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LifeStatus | *Version*:2.27.1 |
| Active as of 2022-06-22 | *Computable Name*:LifeStatus |

 
Status ved udskrivelse 

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
  "id" : "LifeStatus",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LifeStatus",
  "version" : "2.27.1",
  "name" : "LifeStatus",
  "title" : "Livstatus",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Status ved udskrivelse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/LifeStatus",
      "concept" : [{
        "code" : "alive",
        "display" : "Levende"
      },
      {
        "code" : "dead",
        "display" : "Død"
      }]
    }]
  }
}

```
