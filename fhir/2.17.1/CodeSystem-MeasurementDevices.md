# Measurement devices - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Measurement devices**

## CodeSystem: Measurement devices 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MeasurementDevices | *Version*:2.17.1 |
| Active as of 2022-09-15 | *Computable Name*:MeasurementDevices |

 
Measurement devices 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MaaleudstyrDKRR](ValueSet-MaaleudstyrDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MeasurementDevices",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MeasurementDevices",
  "version" : "2.17.1",
  "name" : "MeasurementDevices",
  "title" : "Measurement devices",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Measurement devices",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "kt-1000_kt-2000",
      "display" : "KT-1000/KT-2000",
      "definition" : "KT-1000/KT-2000"
    },
    {
      "code" : "rolimeter",
      "display" : "Rolimeter",
      "definition" : "Rolimeter"
    }
  ]
}

```
