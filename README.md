### Open Swoole skeleton

Run the following commands to start the server:

```bash
make up
```

```bash
make composer install
```

### Open Swoole Metrics

Find /metrics output at `http://127.0.0.1:9501/metrics`

### Prometheus UI

Find Prometheus server at `http://127.0.0.1:9090/`

### Grafana Dashboard

1. Find `http://127.0.0.1:3000/login`, the default username and password are `openswoole:openswoole`.
2. Import Open Swoole Dashboard at `http://127.0.0.1:3000/dashboard/import`, enter ID `15418` and hit load button.
3. Send some traffic with wrk using `wrk -t4 -c16 -d5 --latency http://127.0.0.1:9501/`
4. Have fun with OpenSwoole Dashboard
