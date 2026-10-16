# NIHSS - 10. Dysartri - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 10. Dysartri**

## ValueSet: NIHSS - 10. Dysartri 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS10Dysartri | *Version*:2.27.0 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS10Dysartri |

 
The National Institute of Health Stroke Scale (NIHSS) - 10. Dysartri (bed patienten læse forskellige ord) 

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
  "id" : "NIHSS10Dysartri",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS10Dysartri",
  "version" : "2.27.0",
  "name" : "NIHSS10Dysartri",
  "title" : "NIHSS - 10. Dysartri",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysartri (bed patienten læse forskellige ord)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS10Dysarthria",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Normal artikulation"
      },
      {
        "code" : "1",
        "display" : "1 = Let til moderat dysartri"
      },
      {
        "code" : "2",
        "display" : "2 = Uforståelig tale eller patienten er helt uden tale"
      },
      {
        "code" : "UN",
        "display" : "3 = Patienten intuberet eller anden fysisk barriere for tale"
      }]
    }]
  }
}

```
