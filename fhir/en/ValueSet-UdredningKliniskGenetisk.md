# Udredning - Klinisk/genetisk - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udredning - Klinisk/genetisk**

## ValueSet: Udredning - Klinisk/genetisk 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UdredningKliniskGenetisk | *Version*:2.27.0 |
| Active as of 2022-07-19 | *Computable Name*:UdredningKliniskGenetisk |

 
Udredning - Klinisk/genetisk 

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
  "id" : "UdredningKliniskGenetisk",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UdredningKliniskGenetisk",
  "version" : "2.27.0",
  "name" : "UdredningKliniskGenetisk",
  "title" : "Udredning - Klinisk/genetisk",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Udredning - Klinisk/genetisk",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AssessmentType",
      "concept" : [{
        "code" : "clinical",
        "display" : "Klinisk udredning"
      },
      {
        "code" : "genetic_counseling",
        "display" : "Genetisk rådgivning/udredning"
      }]
    }]
  }
}

```
