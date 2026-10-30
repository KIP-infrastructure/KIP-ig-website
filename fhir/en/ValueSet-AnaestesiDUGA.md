# Anæstesiform (DUGA) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesiform (DUGA)**

## ValueSet: Anæstesiform (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnaestesiDUGA | *Version*:2.27.1 |
| Active as of 2024-02-15 | *Computable Name*:AnaestesiDUGA |

 
Anæstesiform (DUGA) 

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
  "id" : "AnaestesiDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnaestesiDUGA",
  "version" : "2.27.1",
  "name" : "AnaestesiDUGA",
  "title" : "Anæstesiform (DUGA)",
  "status" : "active",
  "date" : "2024-02-15T00:00:00+02:00",
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
  "description" : "Anæstesiform (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
      "concept" : [{
        "code" : "rus",
        "display" : "Rus"
      },
      {
        "code" : "epidural",
        "display" : "Epidural anæstesi"
      },
      {
        "code" : "universal",
        "display" : "Universal anæstesi"
      },
      {
        "code" : "local_anesthesia",
        "display" : "Lokal anæstesi"
      },
      {
        "code" : "spinal",
        "display" : "Spinal anæstesi"
      }]
    }]
  }
}

```
