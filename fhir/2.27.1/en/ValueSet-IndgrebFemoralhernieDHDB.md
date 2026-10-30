# Indgreb - femoalhernie (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb - femoalhernie (DHDB)**

## ValueSet: Indgreb - femoalhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebFemoralhernieDHDB | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebFemoralhernieDHDB |

 
Indgreb - femoalhernie (DHDB) 

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
  "id" : "IndgrebFemoralhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebFemoralhernieDHDB",
  "version" : "2.27.1",
  "name" : "IndgrebFemoralhernieDHDB",
  "title" : "Indgreb - femoalhernie (DHDB)",
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
  "description" : "Indgreb - femoalhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "laparoscopic",
        "display" : "Laparoskopisk"
      },
      {
        "code" : "maclichtenstein",
        "display" : "Modificeret Lichtenstein/MacLichtenstein"
      },
      {
        "code" : "robot_laparoscopic",
        "display" : "Robot-assisteret laparoskopisk"
      },
      {
        "code" : "robot_converted_laparoscopic",
        "display" : "Robot-assisteret laparoskopisk konverteret til laparoskopisk"
      },
      {
        "code" : "robot_converted_open",
        "display" : "Robot-assisteret laparoskopisk konverteret til åben"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet indgreb"
      }]
    }]
  }
}

```
