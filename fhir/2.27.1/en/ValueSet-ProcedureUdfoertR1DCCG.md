# Udført procedure R1 (DCCG) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udført procedure R1 (DCCG)**

## ValueSet: Udført procedure R1 (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertR1DCCG | *Version*:2.27.1 |
| Active as of 2023-03-02 | *Computable Name*:ProcedureUdfoertR1DCCG |

 
Udført procedure R1 (DCCG) 

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
  "id" : "ProcedureUdfoertR1DCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertR1DCCG",
  "version" : "2.27.1",
  "name" : "ProcedureUdfoertR1DCCG",
  "title" : "Udført procedure R1 (DCCG)",
  "status" : "active",
  "date" : "2023-03-02T00:00:00+02:00",
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
  "description" : "Udført procedure R1 (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "KJFH20",
        "display" : "Proktokolektomi og ileostomi - KJFH20"
      },
      {
        "code" : "KJGB00",
        "display" : "Resektion af endetarm - KJGB00"
      },
      {
        "code" : "KJGB10",
        "display" : "Resektion af endetarm med kolostomi - KJGB10"
      },
      {
        "code" : "KJGB32",
        "display" : "Abdominal og intersphincterisk excision af endetarm - KJGB32"
      },
      {
        "code" : "KJGB35",
        "display" : "Abdominal og ischioanal excision af endetarm - KJGB35"
      },
      {
        "code" : "KJGB36",
        "display" : "Abdominal og ekstralevatorisk excision af endetarm - KJGB36"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "ape_conventional",
        "display" : "APE, konventionel"
      },
      {
        "code" : "proctocolectomy_pouch",
        "display" : "Proktokolektomi med ileoanal pouch"
      }]
    }]
  }
}

```
