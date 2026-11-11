# Relaksation til intubation - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Relaksation til intubation**

## ValueSet: Relaksation til intubation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IntubationRelaks | *Version*:2.27.2 |
| Active as of 2022-06-09 | *Computable Name*:IntubationRelaks |

 
Relaksation til intubation 

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
  "id" : "IntubationRelaks",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IntubationRelaks",
  "version" : "2.27.2",
  "name" : "IntubationRelaks",
  "title" : "Relaksation til intubation",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Relaksation til intubation",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IntubationRelaks",
      "concept" : [{
        "code" : "depolar",
        "display" : "Depolariserende"
      },
      {
        "code" : "non_depolar",
        "display" : "Non-depolariserende"
      }]
    }]
  }
}

```
