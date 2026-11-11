# NYHA klasser - hjertesvigt - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NYHA klasser - hjertesvigt**

## ValueSet: NYHA klasser - hjertesvigt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NYHA | *Version*:2.27.3 |
| Active as of 2022-07-21 | *Computable Name*:NYHA |

 
Udfald for NYHA klasser 

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
  "id" : "NYHA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NYHA",
  "version" : "2.27.3",
  "name" : "NYHA",
  "title" : "NYHA klasser - hjertesvigt",
  "status" : "active",
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "Udfald for NYHA klasser",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NYHA",
      "concept" : [{
        "code" : "NYHAI",
        "display" : "NYHA klasse I"
      },
      {
        "code" : "NYHAII",
        "display" : "NYHA klasse II"
      },
      {
        "code" : "NYHAIII",
        "display" : "NYHA klasse III"
      },
      {
        "code" : "NYHAIV",
        "display" : "NYHA klasse IV"
      }]
    }]
  }
}

```
