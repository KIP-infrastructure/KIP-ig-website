# Tackernavn; Non-absorberbare tackers (DHDB) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tackernavn; Non-absorberbare tackers (DHDB)**

## ValueSet: Tackernavn; Non-absorberbare tackers (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TackernavnNonAbsorberbarDHDB | *Version*:2.27.2 |
| Active as of 2022-07-20 | *Computable Name*:TackernavnNonAbsorberbarDHDB |

 
Tackernavn; Non-absorberbare tackers (DHDB) 

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
  "id" : "TackernavnNonAbsorberbarDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TackernavnNonAbsorberbarDHDB",
  "version" : "2.27.2",
  "name" : "TackernavnNonAbsorberbarDHDB",
  "title" : "Tackernavn; Non-absorberbare tackers (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Tackernavn; Non-absorberbare tackers (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "capsure",
        "display" : "Capsure"
      },
      {
        "code" : "protack",
        "display" : "Protack"
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
