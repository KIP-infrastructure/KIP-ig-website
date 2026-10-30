# Udskrevet til - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udskrevet til**

## ValueSet: Udskrevet til 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UdskrevetTil | *Version*:2.27.1 |
| Active as of 2022-05-16 | *Computable Name*:UdskrevetTil |

 
Udskrevet til 

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
  "id" : "UdskrevetTil",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UdskrevetTil",
  "version" : "2.27.1",
  "name" : "UdskrevetTil",
  "title" : "Udskrevet til",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Udskrevet til",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/UdskrevetTil",
      "concept" : [{
        "code" : "stamafd",
        "display" : "Stamafdeling"
      },
      {
        "code" : "hjemmet",
        "display" : "Hjemmet"
      },
      {
        "code" : "reoper",
        "display" : "Reoperation"
      },
      {
        "code" : "intensiv",
        "display" : "Intensiv afdeling"
      },
      {
        "code" : "andet_hosp",
        "display" : "Andet hospital"
      },
      {
        "code" : "doed_u_obs",
        "display" : "Død i observationsperioden"
      }]
    }]
  }
}

```
