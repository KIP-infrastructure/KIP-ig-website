# AP-instabilitet (DKR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AP-instabilitet (DKR)**

## ValueSet: AP-instabilitet (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/APInstabilitetDKR | *Version*:2.27.3 |
| Active as of 2022-10-12 | *Computable Name*:APInstabilitetDKR |

 
AP-instabilitet (DKR) 

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
  "id" : "APInstabilitetDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/APInstabilitetDKR",
  "version" : "2.27.3",
  "name" : "APInstabilitetDKR",
  "title" : "AP-instabilitet (DKR)",
  "status" : "active",
  "date" : "2022-10-12T00:00:00+02:00",
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
  "description" : "AP-instabilitet (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : "<5",
        "display" : "<5 mm"
      },
      {
        "code" : "5-10",
        "display" : "5-10 mm"
      },
      {
        "code" : ">10",
        "display" : ">10 mm"
      }]
    }]
  }
}

```
