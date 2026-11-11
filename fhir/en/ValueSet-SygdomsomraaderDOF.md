# Sygdomsområder - Ortopædkirurgi - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomsområder - Ortopædkirurgi**

## ValueSet: Sygdomsområder - Ortopædkirurgi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderDOF | *Version*:2.27.2 |
| Active as of 2023-05-10 | *Computable Name*:SygdomsomraaderDOF |

 
Alle Sygdomsområder i KIP vedr. ortopædkirurgi 

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
  "id" : "SygdomsomraaderDOF",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderDOF",
  "version" : "2.27.2",
  "name" : "SygdomsomraaderDOF",
  "title" : "Sygdomsområder - Ortopædkirurgi",
  "status" : "active",
  "date" : "2023-05-10T00:00:00+02:00",
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
  "description" : "Alle Sygdomsområder i KIP vedr. ortopædkirurgi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Sygdomsomraader",
      "concept" : [{
        "code" : "dhr",
        "display" : "DHR"
      },
      {
        "code" : "dkr",
        "display" : "DKR"
      },
      {
        "code" : "dkrr",
        "display" : "DKRR"
      },
      {
        "code" : "dsr",
        "display" : "DSR"
      }]
    }]
  }
}

```
