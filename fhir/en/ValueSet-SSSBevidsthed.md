# Scandinavian Stroke Scale - Bevidsthed - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Bevidsthed**

## ValueSet: Scandinavian Stroke Scale - Bevidsthed 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSBevidsthed | *Version*:2.27.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSBevidsthed |

 
Scandinavian Stroke Scale - Bevidsthed 

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
  "id" : "SSSBevidsthed",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSBevidsthed",
  "version" : "2.27.0",
  "name" : "SSSBevidsthed",
  "title" : "Scandinavian Stroke Scale - Bevidsthed",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale - Bevidsthed",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSConsciousness",
      "concept" : [{
        "code" : "6",
        "display" : "6: vågen ved fuld bevidsthed"
      },
      {
        "code" : "4",
        "display" : "4: somnolent, kan vækkes til vågen tilstand"
      },
      {
        "code" : "2",
        "display" : "2: reagerer på verbal opfordring "
      },
      {
        "code" : "0",
        "display" : "0: dybt bevidstløs"
      }]
    }]
  }
}

```
